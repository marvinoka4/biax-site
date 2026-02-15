# Binary Axis - WordPress Theme

**Binary Axis** is a high-performance, animation-driven WordPress theme designed for premium consultancies. It merges the flexibility of WordPress with the precision of **GSAP** and the utility of **Tailwind CSS**.

---

## 🚀 Key Features

* **GSAP-Powered Interactions:** High-fidelity scroll animations including stacking cards and smooth element reveals.
* **Tailwind CSS Workflow:** Utility-first styling for a lightweight, scalable CSS architecture.
* **Dark Mode Support:** Native support for dark/light themes with seamless transitions.
* **SEO Optimized:** Clean semantic HTML5 structure with optimized asset loading.

---

## ⚡ CRITICAL: Animation Initialization

> [!IMPORTANT]
> **Initialization Event:** You must use `window.addEventListener('load', ...)` instead of `DOMContentLoaded`.

### Why?
`DOMContentLoaded` fires as soon as the HTML is parsed, but before images, fonts, and stylesheets have finished loading. Because **ScrollTrigger** calculates positions based on the height of the page, initializing too early will cause triggers to "misalign" when images eventually load and push content down. Using the `load` event ensures the layout is 100% stable before GSAP runs.

**Correct Implementation (`main.js`):**
```javascript
window.addEventListener('load', function() {
    // 1. Initialize Reveal Logic
    initRevealElements();
    
    // 2. Initialize Accordions/Specific Sections
    if (window.accordionAnimation) {
        window.accordionAnimation.init();
    }
    
    // 3. Force Recalculation
    if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.refresh();
    }
});
