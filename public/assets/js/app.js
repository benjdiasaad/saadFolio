import * as THREE from "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js";

const canvas = document.getElementById("bg");
const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(55, 1, 0.1, 200);
camera.position.set(0, 0.4, 8);

// Lights
const ambient = new THREE.AmbientLight(0xffffff, 0.55);
scene.add(ambient);

const key = new THREE.DirectionalLight(0xffffff, 0.9);
key.position.set(2, 3, 3);
scene.add(key);

const rim = new THREE.PointLight(0x88aaff, 1.2, 40);
rim.position.set(-6, 1, 8);
scene.add(rim);

// Geometry: TorusKnot "signature"
const knotGeo = new THREE.TorusKnotGeometry(1.25, 0.42, 220, 18);
const knotMat = new THREE.MeshStandardMaterial({
  color: 0xffffff,
  metalness: 0.55,
  roughness: 0.22
});
const knot = new THREE.Mesh(knotGeo, knotMat);
knot.position.set(2.5, -0.3, 0);
scene.add(knot);

// Floating glass plates
const plateGeo = new THREE.PlaneGeometry(4.6, 2.8, 1, 1);
const plateMat = new THREE.MeshPhysicalMaterial({
  color: 0xffffff,
  transparent: true,
  opacity: 0.08,
  roughness: 0.12,
  metalness: 0.0,
  transmission: 1.0,
  thickness: 0.6,
  ior: 1.2
});

const plate1 = new THREE.Mesh(plateGeo, plateMat);
plate1.position.set(-2.8, 0.9, -1.8);
plate1.rotation.set(0.2, 0.6, -0.1);
scene.add(plate1);

const plate2 = new THREE.Mesh(plateGeo, plateMat);
plate2.position.set(-1.2, -1.2, -3.2);
plate2.rotation.set(-0.15, 0.35, 0.08);
scene.add(plate2);

// Starfield particles
const starCount = 1400;
const starGeo = new THREE.BufferGeometry();
const starPos = new Float32Array(starCount * 3);
for (let i = 0; i < starCount; i++) {
  const r = 22 * Math.random();
  const theta = Math.random() * Math.PI * 2;
  const y = (Math.random() - 0.5) * 18;
  starPos[i * 3 + 0] = Math.cos(theta) * r;
  starPos[i * 3 + 1] = y;
  starPos[i * 3 + 2] = Math.sin(theta) * r - 12;
}
starGeo.setAttribute("position", new THREE.BufferAttribute(starPos, 3));
const starMat = new THREE.PointsMaterial({ color: 0xffffff, size: 0.018, transparent: true, opacity: 0.8 });
const stars = new THREE.Points(starGeo, starMat);
scene.add(stars);

// Resize
function resize() {
  const w = window.innerWidth;
  const h = window.innerHeight;
  renderer.setSize(w, h, false);
  camera.aspect = w / h;
  camera.updateProjectionMatrix();
}
window.addEventListener("resize", resize);
resize();

// Mouse interaction
const mouse = { x: 0, y: 0 };
window.addEventListener("pointermove", (e) => {
  mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
  mouse.y = -((e.clientY / window.innerHeight) * 2 - 1);
});

// Scroll interaction (subtle depth)
let scrollY = 0;
window.addEventListener("scroll", () => {
  scrollY = window.scrollY || 0;
  updateProgress();
});

// Animate
const clock = new THREE.Clock();
function animate() {
  const t = clock.getElapsedTime();

  // Smooth camera parallax
  camera.position.x = THREE.MathUtils.lerp(camera.position.x, mouse.x * 0.55, 0.06);
  camera.position.y = THREE.MathUtils.lerp(camera.position.y, 0.4 + mouse.y * 0.25, 0.06);

  // Scroll depth
  const zTarget = 8 + Math.min(scrollY / 600, 2.2);
  camera.position.z = THREE.MathUtils.lerp(camera.position.z, zTarget, 0.05);

  // Motion
  knot.rotation.x = t * 0.35;
  knot.rotation.y = t * 0.55;

  plate1.position.y = 0.9 + Math.sin(t * 0.7) * 0.15;
  plate2.position.y = -1.2 + Math.cos(t * 0.6) * 0.18;

  stars.rotation.y = t * 0.02;

  renderer.render(scene, camera);
  requestAnimationFrame(animate);
}
animate();

/* UI interactions */
const year = document.getElementById("year");
year.textContent = new Date().getFullYear();

// Theme toggle (Light/Dark) with persistence
const themeBtn = document.getElementById("themeToggle");
const themeIcon = themeBtn?.querySelector(".theme-icon");

function applyTheme(mode) {
  const isLight = mode === "light";
  document.body.classList.toggle("light", isLight);
  if (themeIcon) themeIcon.textContent = isLight ? "☀" : "☾";
  if (typeof starMat !== "undefined") {
    starMat.opacity = isLight ? 0.35 : 0.8;
    starMat.needsUpdate = true;
  }
}

const savedTheme = localStorage.getItem("theme") || "dark";
applyTheme(savedTheme);

themeBtn?.addEventListener("click", () => {
  const next = document.body.classList.contains("light") ? "dark" : "light";
  localStorage.setItem("theme", next);
  applyTheme(next);
});

// Reveal on scroll
const revealEls = [...document.querySelectorAll(".reveal")];
const obs = new IntersectionObserver((entries) => {
  for (const e of entries) {
    if (e.isIntersecting) e.target.classList.add("show");
  }
}, { threshold: 0.12 });
revealEls.forEach(el => obs.observe(el));

// Progress bar
const progressBar = document.getElementById("progressBar");
function updateProgress() {
  const doc = document.documentElement;
  const max = doc.scrollHeight - doc.clientHeight;
  const pct = max > 0 ? (doc.scrollTop / max) * 100 : 0;
  progressBar.style.width = `${pct}%`;
}
updateProgress();

// Mobile menu
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("open");
  mobileMenu.setAttribute("aria-hidden", mobileMenu.classList.contains("open") ? "false" : "true");
});
mobileMenu.addEventListener("click", (e) => {
  if (e.target === mobileMenu) {
    mobileMenu.classList.remove("open");
    mobileMenu.setAttribute("aria-hidden", "true");
  }
});
mobileMenu.querySelectorAll("a[href^='#']").forEach(a => {
  a.addEventListener("click", () => {
    mobileMenu.classList.remove("open");
    mobileMenu.setAttribute("aria-hidden", "true");
  });
});

// Toast for placeholders
const toast = document.getElementById("toast");
document.querySelectorAll("[data-toast]").forEach(btn => {
  btn.addEventListener("click", () => showToast(btn.dataset.toast));
});
let toastTimer;
function showToast(msg){
  toast.textContent = msg;
  toast.classList.add("show");
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove("show"), 1600);
}

// Contact form -> mailto
const form = document.getElementById("contactForm");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const data = new FormData(form);
  const name = encodeURIComponent(data.get("name"));
  const email = encodeURIComponent(data.get("email"));
  const message = encodeURIComponent(data.get("message"));
  const subject = encodeURIComponent(`Portfolio — Message de ${decodeURIComponent(name)}`);
  const body = encodeURIComponent(`Nom: ${decodeURIComponent(name)}\nEmail: ${decodeURIComponent(email)}\n\nMessage:\n${decodeURIComponent(message)}`);

  window.location.href = `mailto:benjdiasaad97@gmail.com?subject=${subject}&body=${body}`;
});
