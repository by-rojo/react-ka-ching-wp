<?php
/*
    This is the interface to seed data
*/
$react_ka_ching_add_meta_nonce_sd = wp_create_nonce('react_ka_ching_seed_form_nonce');
?>

<div>
    <br />
    <hr />
    <h2>
        Seed Data
    </h2>
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" id="react_ka_ching_seed_form">
        <input type="hidden" name="action" value="react_ka_ching_seed_form_response">
        <input type="hidden" name="react_ka_ching_seed_form_nonce" value="<?php echo $react_ka_ching_add_meta_nonce_sd ?>" />

        <fieldset>
            <label>Seed Name</label>
            <input type="text" name="seedName" required></input>
        </fieldset>

        <fieldset>
            <label>Amazon Search Index</label>
            <select name="amazonSearchIndex" required>
                <option>All</option>
                <option value="AmazonVideo">Amazon Video</option>
                <option value="Apparel">Clothing & Accessories</option>
                <option>Appliances</option>
                <option value="ArtsAndCrafts">Arts & Crafts</option>
                <option value="Automotive">Automotive Parts & Accessories</option>
                <option>Baby</option>
                <option value="Beauty">Beauty & Personal Care</option>
                <option>Books</option>
                <option>Classical</option>
                <option value="Collectibles">Collectibles & Fine Art</option>
                <option>Computers</option>
                <option value="DigitalMusic">Digital Music</option>
                <option value="DigitalEducationalResources">Digital Educational Resources</option>
                <option>Electronics</option>
                <option value="EverythingElse">Everything Else</option>
                <option>Fashion</option>
                <option value="FashionBaby">Baby Clothing, Shoes & Jewelry</option>
                <option value="FashionBoys">Boys Clothing, Shoes & Jewelry</option>
                <option value="FashionGirls">Girls Clothing, Shoes & Jewelry</option>
                <option value="FashionMen">Men Clothing, Shoes & Jewelry</option>
                <option value="FashionWomen">Women Clothing, Shoes & Jewelry</option>
                <option value="GardenAndOutdoor">Garden & Outdoor</option>
                <option value="GiftCards">Gift Cards</option>
                <option value="GroceryAndGourmetFood">Grocery & Gourmet Food</option>
                <option>Handmade</option>
                <option value="HealthPersonalCare">Health, Household & Baby Care</option>
                <option value="HomeAndKitchen">Home & Kitchen</option>
                <option value="Industrial">Industrial & Scientific</option>
                <option>Jewelry</option>
                <option value="KindleStore">Kindle Store</option>
                <option value="LocalServices">Home & Business Services</option>
                <option value="Luggage">Luggage & Travel Gear</option>
                <option value="LuxuryBeauty">Luxury Beauty</option>
                <option value="Magazines">Magazine Subscriptions</option>
                <option>Miscellaneous</option>
                <option value="MobileAndAccessories">Cell Phones & Accessories</option>
                <option value="MobileApps">Apps & Games</option>
                <option value="MoviesAndTV">Movies & TV</option>
                <option value="Music">CDs & Vinyl</option>
                <option value="MusicalInstruments">Musical Instruments</option>
                <option value="OfficeProducts">Office Products</option>
                <option value="PetSupplies">Pet Supplies</option>
                <option value="Photo">Camera & Photo</option>
                <option>Popular</option>
                <option>Shoes</option>
                <option>Software</option>
                <option value="SportsAndOutdoors">Sports & Outdoors</option>
                <option value="ToolsAndHomeImprovement">Tools & Home Improvement</option>
                <option value="ToysAndGames">Toys & Games</option>
                <option>VHS</option>
                <option value="VideoGames">Video Games</option>
                <option>Watches</option>
            </select>
        </fieldset>
        <fieldset>
            <label>Amazon Keywords</label>
            <input type="text" name="amazonKeywords" required></input>
        </fieldset>
        <br />
        <input type="submit" value="Run"></input>
    </form>
</div>