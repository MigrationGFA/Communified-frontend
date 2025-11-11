function selectPlan(element) {
  // Remove selected class from all cards
  document.querySelectorAll(".pricing-card").forEach((card) => {
    card.classList.remove("selected");
    const btn = card.querySelector(".select-plan-btn");

    // Reset all buttons to outline style
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });

  // Add selected class to clicked card
  element.classList.add("selected");

  // Update button style for selected card
  const selectedBtn = element.querySelector(".select-plan-btn");
  selectedBtn.classList.remove("btn-outline-primary");
  selectedBtn.classList.add("btn-primary");

  // Get the selected plan
  const selectedPlan = element.getAttribute("data-plan");
  console.log("Selected plan:", selectedPlan);
}

// Select the popular plan by default when the page loads
document.addEventListener("DOMContentLoaded", function () {
  const popularPlan = document.querySelector(".pricing-card.popular");
  if (popularPlan) {
    selectPlan(popularPlan);
  }
});

function mobileResponse() {
  if (window.innerWidth < 769) {
    document.querySelector(".stack-box").classList.remove("stack-box");
  }
}
mobileResponse();
// window.onpageload = mobileResponse();

document.addEventListener("DOMContentLoaded", function() {
  const lazyBackgrounds = document.querySelectorAll(".lazy-background");
  
  if ("IntersectionObserver" in window) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          // Get the correct background class from data attribute
          const bgClass = entry.target.dataset.background;
          entry.target.classList.add(bgClass);
          entry.target.classList.remove("lazy-background");
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });
    
    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
});
