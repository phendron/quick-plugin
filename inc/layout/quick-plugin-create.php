<h1>Quick Plugin | Create New</h1>

<form class="plugin-create">

<section class="main-section">

<label>Plugin Name: (Required)</label>
<br/>
<input type="text" name="plugin-name" value="" placeholder="Plugin Name: New Beta Plugin" />
		
<br />
	
<label>Description:</label>
<br/>
<input type="text" name="plugin-description" value="" placeholder="Description: My plugin doesnt do much RN but just you wait ohh boiii oh weee." />

<br />
	
<label>Plugin Version:</label>
<br/>
<input type="text" name="plugin-version" value="1.0.0" placeholder="Plugin Version: 1.0.0" />

<br />

<button class="onclick-show" show-class="step2" hide-class="main-section">Continue (Step 1 of 2)</button>
</section>
	
<section class="step2" style="display:none;">
	
<section class="sub-step2">
<button class="onclick-show" show-class="step3" hide-class="sub-step2">Add Additional Information</button>
<h2>- OR -</</h2>
<br />
<input type="submit" name="" value="Create Plugin" />
</section>
	
<section class="step3" style="display:none;">
<label>Plugin URI:</label>
<br/>
<input type="text" name="plugin-uri" value="" placeholder="Plugin URI: https://example.domain/plugin/plugin-name/" />
	
<br />
	
<label>Minimal Wordpress Version Required:</label>
<br/>
<select class="plugin-wordpress-version">
<option disabled="disabled" selected="selected">Select Version</option>
</select>
	
<br />
	
<label>Minimal PHP Version Required:</label>
<br/>
<select class="plugin-php-version">
<option disabled="disabled" selected="selected">Select Version</option>
<option value="7.4">7.4</option>
<option value="8.0">8.0</option>
<option value="8.1">8.1</option>
</select>
<br />
	
<label>Author:</label>
<br/>
<input type="text" name="plugin-author" value="" placeholder="Author: it is me i am the author" />
	
<br />
	
<label>Author URI:</label>
<br/>
<input type="text" name="plugin-author-uri" value="" placeholder="Author URI: https:/author.me/" />
	
<br />
	
<label>License:</label>
<br/>
<input type="text" name="plugin-license" value="" placeholder="License: GPL v2 or later" />
	
<br />
	
<label>License URI:</label>
<br/>
<input type="text" name="plugin-license-uri" value="" placeholder="License URI: https://www.gnu.org/licenses/gpl-2.0.html" />
	
<br />
	
<label>Update URI:</label>
<br/>
<input type="text" name="plugin-update-uri" value="" placeholder="Update URI: https://plugin.domain/update" />

<br />
	
<label>Text Domain:</label>
<br/>
<input type="text" name="plugin-text-domain" value="" placeholder="Text-Domain: my-unique-plugin-name" />

<br />
	
<label>Domain Path:</label>
<br/>
<input type="text" name="plugin-domain-path" value="" placeholder="/languages" />
	
<br />
	
<input type="submit" name="" value="Create Plugin" />
</section>
	
</section>
	
<br />
	
</form>
