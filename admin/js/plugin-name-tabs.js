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
    /**
     *  <div class="plugin-name-settings">
                    <ul class="tabs">
                         <li><a href="#tab1">Welcome</a></li>
                         <li><a href="#tab2">Settings</a></li>
                         <li><a href="#tab3">Services</a></li>
                         <li><a href="#tab4">Support</a></li>
                         <li><a href="#tab5">Blogs</a></li>
                    </ul>

                    <div id="tab1" class="tab-content">
                         <!-- Content for Welcome tab -->
                         tab1
                    </div>

                    <div id="tab2" class="tab-content">
                         <!-- Content for Settings tab -->tab2
                    </div>

                    <div id="tab3" class="tab-content">
                         <!-- Content for Services tab -->tab3
                    </div>

                    <div id="tab4" class="tab-content">
                         <!-- Content for Support tab -->tab4
                    </div>

                    <div id="tab5" class="tab-content">
                         <!-- Content for Blogs tab -->tab5
                    </div>
                    </div>
     */
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
  
/**
 * CODE NO 2
 */
/*
  document.addEventListener("DOMContentLoaded", function () {
    const tabsContainer = document.querySelector(".idss");
    const tabs = tabsContainer.querySelectorAll("a");
    const contentContainer = document.querySelector(".conts");
    const tabContents = contentContainer.querySelectorAll(".tab-content");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", (e) => {
            e.preventDefault();
            tabContents.forEach((content) => {
                content.classList.remove("active");
            });
            tabContents[index].classList.add("active");

            tabs.forEach((t) => t.classList.remove("tabactive"));
            tab.classList.add("tabactive");
        });
    });

    const currentHash = window.location.hash;
    if (currentHash) {
        const tab = tabsContainer.querySelector(`a[href="${currentHash}"]`);
        if (tab) {
            tab.click();
        }
    } else {
        tabs[0].click();
    }
});
*/
document.addEventListener("DOMContentLoaded", function () {
  const tabsContainer = document.querySelector(".idss");
  const tabs = tabsContainer.querySelectorAll("a");
  const contentContainer = document.querySelector(".conts");
  const tabContents = contentContainer.querySelectorAll(".tab-content");

  tabs.forEach((tab, index) => {
      tab.addEventListener("click", (e) => {
          e.preventDefault();
          tabContents.forEach((content) => {
              content.classList.remove("active");
          });
          tabContents[index].classList.add("active");

          tabs.forEach((t) => t.classList.remove("tabactive"));
          tab.classList.add("tabactive");

          // Update URL with the selected tab's href
          window.history.pushState(null, null, tab.getAttribute("href"));
      });
  });

  const currentHash = window.location.hash;
  if (currentHash) {
      const tab = tabsContainer.querySelector(`a[href="${currentHash}"]`);
      if (tab) {
          tab.click();
      }
  } else {
      // If no hash is present, select #tab1 by default and update URL
      tabs[0].click();
      window.history.pushState(null, null, tabs[0].getAttribute("href"));
  }
});




// COPIES THE CODE INSIDE
function copyToClipboard() {
  // Get the text content from the div
  var content = document.getElementById('myDiv').innerText;

  // Create a temporary textarea element to copy the text
  var tempTextArea = document.createElement('textarea');
  tempTextArea.value = content;

  // Append the textarea to the document
  document.body.appendChild(tempTextArea);

  // Select the text in the textarea
  tempTextArea.select();
  tempTextArea.setSelectionRange(0, 99999); // For mobile devices

  // Copy the selected text to the clipboard
  document.execCommand('copy');

  // Remove the temporary textarea
  document.body.removeChild(tempTextArea);

  // Display a success message in a separate div
  var successMessage = document.getElementById('successMessage');
  successMessage.innerHTML = 'Copied successfully!';
  successMessage.style.display = 'block';

  // Hide the success message after 5 seconds
  setTimeout(function () {
      successMessage.style.display = 'none';
  }, 5000);
}
