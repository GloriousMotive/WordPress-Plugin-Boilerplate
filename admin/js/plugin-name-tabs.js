document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".plugin-name-settings .tabs a");
    const tabContents = document.querySelectorAll(
      ".plugin-name-settings .tab-content"
    );
  
    tabs.forEach((tab, index) => {
      tab.addEventListener("click", (e) => {
        e.preventDefault();
        tabContents.forEach((content) => {
          content.classList.remove("active");
        });
        tabContents[index].classList.add("active");
  
        // Add 'tabactive' class to the selected tab
        tabs.forEach((t) => t.classList.remove("tabactive"));
        tab.classList.add("tabactive");
      });
    });
  
    // Handle initial tab from the URL hash or select #tab1 by default
    const currentHash = window.location.hash;
    if (currentHash) {
      const tab = document.querySelector(
        `.plugin-name-settings .tabs a[href="${currentHash}"]`
      );
      if (tab) {
        tab.click();
      }
    } else {
      // If no hash is present, select #tab1 by default
      tabs[0].click();
    }
  });
  