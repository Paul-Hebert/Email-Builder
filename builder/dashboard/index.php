    <?php
      $title = 'Email Builder';
      $base_url = '../../';

      $theme = $_GET['theme'];

      include($base_url . 'includes/page_sections/header.php');
    ?>
    <div class="row">
      <div id="email" class="col-lg-8 container">
        <?php 
          echo '<link id="theme_CSS" rel="stylesheet" type="text/css" href="' . $base_url . 'includes/themes/' . $theme . '/css/style.css">';    
        ?>

        <style id="added_CSS"></style>

        <?php
          include($base_url . 'includes/themes/' . $theme . '/index.php');
        ?>
      </div>

      <div id="dashboard" class="col-lg-4 container">
        <menu id="invoice_form" enctype='multipart/form-data'>
          <section id="content_menu">
            <h2>Content</h2>

            <fieldset>
              <?php
                include('content_picker.php');
              ?>
            </fieldset>
          </section>
          
          <section>
            <h2>Design</h2>
            
            <fieldset>
              <?php
                include('font_picker.php'); 

                echo '<div class="subsection">';
                echo '<h3>Style 1</h3>';
                  $include_name = 'Background';
                  $include_data = ['.primary','background'];
                  include('color_picker.php');

                  $include_name = 'Text color';
                  $include_data = ['.primary','color'];
                  include('color_picker.php');
                echo '</div>';

                echo '<div class="subsection">';
                echo '<h3>Style 2</h3>';                
                  $include_name = 'Background';
                  $include_data = ['.secondary','background'];
                  include('color_picker.php');

                  $include_name = 'Text color';
                  $include_data = ['.secondary','color'];
                  include('color_picker.php');                
                echo '</div>';

                echo '<div class="subsection">';
                echo '<h3>Style 3</h3>';                
                  $include_name = 'Background';
                  $include_data = ['.light','background'];
                  include('color_picker.php');

                  $include_name = 'Text color';
                  $include_data = ['.light','color'];
                  include('color_picker.php');                
                echo '</div>';

                echo '<div class="subsection">';
                  $include_name = 'Body background';
                  $include_data = ['table.body','background'];
                  include('color_picker.php');
                echo '</div>';
              ?>
            </fieldset>
          </section>

          <section>
            <button id="export_HTML">Export HTML</button>
          </section>
        </menu>
      </div>
    </div>
    <?php
      include($base_url . 'includes/page_sections/scripts.php');
    ?>
  </body>
</html>    