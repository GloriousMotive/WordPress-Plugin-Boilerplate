
/** HORIZONTAL TAB WITH BUTTONS */
<style>
    /* Add your styling here */
    .tab-contents {
        display: none;
    }

    .active-tabs {
        display: block;
    }

    .tabs {
        display: flex;
        cursor: pointer;
    }

    .tab {
        padding: 10px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>
<div class="tabs" id="tabContainer">
    <?php
    $categories = ['Category 1', 'Category 2', 'Category 3'];

    foreach ($categories as $index => $category) {
        echo '<div class="tab" onclick="changeTab(' . $index . ')">' . $category . '</div>';
    }
    ?>
</div>

<?php
// Content for each category
$contents = [
    '<p>Content for Category 1</p>',
    '<p>Content for Category 2</p>',
    '<p>Content for Category 3</p>'
];

foreach ($contents as $index => $content) {
    echo '<div class="tab-contents" id="tab' . $index . '">' . $content . '</div>';
}
?>

<script>
    function changeTab(index) {
        // Hide all tab contents
        var tabContents = document.getElementsByClassName('tab-contents');
        for (var i = 0; i < tabContents.length; i++) {
            tabContents[i].style.display = 'none';
        }

        // Remove 'active-tab' class from all tabs
        var tabs = document.getElementsByClassName('tab');
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active-tabs');
        }

        // Show the selected tab content and mark the tab as active
        document.getElementById('tab' + index).style.display = 'block';
        tabs[index].classList.add('active-tabs');
    }
</script>



/** NEW SOMETHING */