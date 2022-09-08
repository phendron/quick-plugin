<h1>Quick Plugin | Create New</h1>

<form class="plugin-create">

<section class="main-section">

<label>Plugin Name: (Required) <icon help="name">i</icon></label>
<help>The name of your plugin, which will be displayed in the Plugins list in the WordPress Admin</help>

<input type="text" name="plugin-name" value="" placeholder="Plugin Name: New Beta Plugin" />
	
<label>Description: <icon help="name">i</icon></label>
<help>A short description of the plugin, as displayed in the Plugins section in the WordPress Admin. Keep this description to fewer than 140 characters.</help>
<input type="text" name="plugin-description" value="" placeholder="Description: My plugin doesnt do much RN but just you wait ohh boiii oh weee." />
	
<label>Plugin Version: <icon help="name">i</icon></label>
<help>The current version number of the plugin, such as 1.0 or 1.0.3.</help>
<input type="text" name="plugin-version" value="1.0.0" placeholder="Plugin Version: 1.0.0" />

<button class="onclick-show full" show-class="step2" hide-class="main-section">Continue (Step 1 of 2)</button>
</section>
	
<section class="step2" style="display:none;">
	
<section class="sub-step2">
<button class="onclick-show full" show-class="step3" hide-class="sub-step2">Add Additional Information</button>
<h2>- OR -</</h2>
<br />
<input type="submit" name="" value="Create Plugin" />
</section>
	
<section class="step3" style="display:none;">
<label>Plugin URI: <icon help="name">i</icon></label>
<help>The home page of the plugin, which should be a unique URL, preferably on your own website. This must be unique to your plugin. You cannot use a WordPress.org URL here.</help>
<input type="text" name="plugin-uri" value="" placeholder="Plugin URI: https://example.domain/plugin/plugin-name/" />
	
<label>Minimal Wordpress Version Required: <icon help="name">i</icon></label>
<help>The lowest WordPress version that the plugin will work on.</help>

<select class="plugin-wordpress-version" name="plugin-wordpress-version">
<option disabled="disabled" selected="selected">Select Version</option>
</select>
	
<label>Minimal PHP Version Required: <icon help="name">i</icon></label>
<help>The minimum required PHP version.</help>
<select class="plugin-php-version" name="plugin-php-version">
<option disabled="disabled" selected="selected">Select Version</option>
<option value="7.4">7.4</option>
<option value="8.0">8.0</option>
<option value="8.1">8.1</option>
</select>
	
<label>Author: <icon help="name">i</icon></label>
<help>The name of the plugin author. Multiple authors may be listed using commas.</help>
<input type="text" name="plugin-author" value="" placeholder="Author: it is me i am the author" />
	
<label>Author URI: <icon help="name">i</icon></label>
<help>The author’s website or profile on another website, such as WordPress.org.</help>
<input type="text" name="plugin-author-uri" value="" placeholder="Author URI: https:/author.me/" />
	
<label>License: <icon help="name">i</icon></label>
<help> The short name (slug) of the plugin’s license (e.g. GPLv2). More information about licensing can be found in the WordPress.org guidelines.</help>
<input type="text" name="plugin-license" value="" placeholder="License: GPL v2 or later" />
	
<label>License URI: <icon help="name">i</icon></label>
<help>A link to the full text of the license (e.g. https://www.gnu.org/licenses/gpl-2.0.html).</help>
<input type="text" name="plugin-license-uri" value="" placeholder="License URI: https://www.gnu.org/licenses/gpl-2.0.html" />
	
<label>Update URI: <icon help="name">i</icon></label>
<help>Allows third-party plugins to avoid accidentally being overwritten with an update of a plugin of a similar name from the WordPress.org Plugin Directory. For more info read related dev note.</help>
<input type="text" name="plugin-update-uri" value="" placeholder="Update URI: https://plugin.domain/update" />
	
<label>Text Domain: <icon help="name">i</icon></label>
<help>The gettext text domain of the plugin. More information can be found in the Text Domain section of the How to Internationalize your Plugin page.</help>
<input type="text" name="plugin-text-domain" value="" placeholder="Text-Domain: my-unique-plugin-name" />
	
<label>Domain Path: <icon help="name">i</icon></label>
<help>The domain path lets WordPress know where to find the translations. More information can be found in the Domain Path section of the How to</help>
<input type="text" name="plugin-domain-path" value="" placeholder="/languages" />
	
<input type="submit" name="" value="Create Plugin" />
</section>
	
</section>
	
<br />
	
</form>
	
<section class="fini" style="display:none">
<h2>Plugin Created</h2>
<button class="full">Go to Plugins</button>
</section>
