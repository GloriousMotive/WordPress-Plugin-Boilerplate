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



/**
 * Horizontal Tabs for Admin Part
 */
// function changeTab(index) {
//   // Hide all tab contents
//   var tabContents = document.getElementsByClassName('glorious-ht-plugin-name-tab-content');
//   for (var i = 0; i < tabContents.length; i++) {
//       tabContents[i].style.display = 'none';
//   }

//   // Remove 'active-tab' class from all tabs
//   var tabs = document.getElementsByClassName('glorious-ht-plugin-name-tab');
//   for (var i = 0; i < tabs.length; i++) {
//       tabs[i].classList.remove('glorious-ht-plugin-name-active-tab');
//   }

//   // Show the selected tab content and mark the tab as active
//   document.getElementById('glorious-ht-plugin-name-tab' + index).style.display = 'block';
//   tabs[index].classList.add('glorious-ht-plugin-name-active-tab');
// }
// // Select the first tab by default
// changeTab(0);






//
// JavaScript function to show/hide tab content from Horizontal Tabs, 
// Doesn't full data dynamically
// Function to fetch JSON data from the provided URL
// Version : 1.0
        // async function fetchJsonData() {
        //     try {
        //         const response = await fetch('http://plugins.local/wp-content/plugins/WordPress-Plugin-Boilerplate/admin/json/theme.json');
        //         const data = await response.json();
        //         return data;
        //     } catch (error) {
        //         console.error('Error fetching JSON data:', error);
        //         return [];
        //     }
        // }

        // // Initial rendering of all products
        // fetchJsonData().then(jsonData => renderProducts(jsonData));

        // // Function to filter products based on type
        // function filterProducts(type) {
        //     fetchJsonData().then(jsonData => {
        //         const filteredData = type === 'ALL' ? jsonData : jsonData.filter(product => product.type === type);
        //         renderProducts(filteredData);
        //     });
        // }

        // // Function to render products dynamically
        // function renderProducts(products) {
        //     const container = document.getElementById('productContainer');
        //     container.innerHTML = '';

        //     products.forEach(product => {
        //         const productCard = document.createElement('div');
        //         productCard.classList.add('product-card');

        //         // Customize the product card HTML structure based on your needs
        //         productCard.innerHTML = `
        //             <h2>${product.Title}</h2>
        //             <p>${product.description}</p>
        //             <img src="${product.image_url}" alt="${product.Title}" style="max-width: 100%;">
        //             <p>Category: ${product.category}</p>
        //             <p>Price: $${product.price}</p>
        //             <p>Sale Price: $${product.sale_price}</p>
        //             <a href="${product.buy_link}" target="_blank">Buy Now</a>
        //             <a href="${product.sale_link}" target="_blank">Sale Link</a>
        //         `;

        //         container.appendChild(productCard);
        //     });
        // }



// Function to fetch JSON data from the dynamically defined URL
// Used for Horixontal tabs in Admin Themes, Plugins and Services
// Version 2.0
async function fetchJsonData() {
  try {
      const response = await fetch(Plugin_Name_JsonContent); //Gets the JSON URL from PHP Recommended. 
      const data = await response.json();
      return data;
  } catch (error) {
      console.error('Error fetching JSON data:', error);
      return [];
  }
}

// Initial rendering of all products
fetchJsonData().then(jsonData => renderProducts(jsonData));

// Function to filter products based on type
function filterProducts(type) {
  // Remove the 'active' class from all buttons
  document.querySelectorAll('.btn').forEach(btn => {
      btn.classList.remove('active');
  });

  // Add the 'active' class to the clicked button
  event.target.classList.add('active');

  fetchJsonData().then(jsonData => {
      const filteredData = type === 'ALL' ? jsonData : jsonData.filter(product => product.type === type);
      renderProducts(filteredData);
  });
}

// Function to render products dynamically
function renderProducts(products) {
  const container = document.getElementById('productContainer');
  container.innerHTML = '';

  products.forEach(product => {
      const productCard = document.createElement('div');
      productCard.classList.add('product-card');
      productCard.classList.add('cards');

      // Customize the product card HTML structure based on your needs
      productCard.innerHTML = `
          <div><h2>${product.Title}</h2>
          <p>${product.description}</p>
          <img src="${Plugin_Name_json_img}${product.image_url}" alt="${product.Title}" style="max-width: 100%;">
          <div class="flex-container">
            <div class="left flex-column-inline">
              <span>Category: ${product.category}</span>
              <span>Type: ${product.type}</span>
            </div>
            <div class="right flex-column-inline">
              ${product.price !== '' ? `<span>Price: $${product.price}</span>` : ''}
              ${product.sale_price !== '' ? `<span class="green-text">Sale Price: $${product.sale_price}</span>` : ''}
            </div>
          </div>

          ${product.sale_link !== '' ? `<div class="flex-container"><a class="cards-button" href="${product.sale_link}" target="_blank">On Sale! - Buy Now</a></div>` : `<div class="flex-container"><a class="cards-button" href="${product.buy_link}" target="_blank">Buy Now</a></div>`}
      
          
      `;

      container.appendChild(productCard);
  });
}