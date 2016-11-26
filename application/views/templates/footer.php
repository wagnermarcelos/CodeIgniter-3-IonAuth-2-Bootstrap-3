<?php defined('BASEPATH') OR exit('Esta página não pode ser acessada diretamente / No direct script access allowed'); ?>
    <footer class="footer">  
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-8">
              &copy; 2016 Develop : <a href="http://www.wsinfo.org/" target="_blank"><span class="fa fa-hand-spock-o"></span> WsInfo.org</a> | <a href="#">Terms of Service</a> | <a href="#">Privacy</a>
            </div>
            <div class="col-md-4">
              <p class="muted pull-right">
                <select id="select_lang" class="form-control">
                  <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                  <option value="portuguese" <?php if($this->session->userdata('site_lang') == 'portuguese') echo 'selected="selected"'; ?>>Português</option>   
                </select>        
              </p>
            </div>
          </div>
        </div>
        <small>
          <p class="muted pull-right"> Renderizado em <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </small>
      </div>      
    </footer>
  </body>
  <script>
      $('#select_lang').bind('change', function () {
          var url = '<?php echo base_url('language_switcher/switchLang/'); ?>'+ $(this).val();
          if (url != '') {
              window.location = url;
          }
          return false;
      });
  </script>    
</html>
