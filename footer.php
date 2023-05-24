       <div class="wrapper-fluid send-request">
        <div class="wrapper">
          <div class="wrap-form">
				<?php echo do_shortcode('[contact-form-7 id="20" title="Контактная форма 1"]');?>
          </div>
        </div>
      </div>



	</main>
 <footer class="footer-page">



      <div class="wrapper-fluid social">
        <div class="wrapper">
          
          <div class="call-order">
            <h3><span>Звоните</span> и заказывайте!</h3>
            <div class="phone-block">
              <img src="<?php echo get_template_directory_uri(); ?>/img/phone-ico.png" alt="">
              <div class="phone-number"><?php the_field('телефон','option');?></div>
            </div>
          </div>

          <div class="list-social">
            <div class="item-social">
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<script type="text/javascript">
  VK.init({apiId: 5463816, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Like block will be -->
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
            </div>
            <div class="item-social">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.6&appId=416835608491042";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="http://nova-house.ru/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>
            <div class="item-social">
             <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ru">Твитнуть</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
          </div>

        </div>
      </div>



      <div class="wrapper-fluid footer">
        <div class="wrapper">
          <div class="left-footer">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png"><br>
              <span>Строительство<br>каркасных домов</span>
            </a>
          </div>
          <div class="right-footer">
            <div class="footer-text">
              <div class="footer-text-block footer-text-left">
                <h3>Каталог домов</h3>
					<?php
							$args = array(
							'theme_location'  => '',
							'menu'            => 'Меню подвал 1', 
							'container'       => '', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul  class="super_menu">%3$s</ul>',
							'depth'           => 0
						);

						wp_nav_menu(  $args  ); 
					?>
              </div>

              <div class="footer-text-block footer-text-right">
                <h3> Строительство с нами</h3>
			<?php
					$args = array(
					'theme_location'  => '',
					'menu'            => 'Меню подвал 2', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul  class="super_menu">%3$s</ul>',
					'depth'           => 0
				);

				wp_nav_menu(  $args  ); 
			?>
              </div>
            </div>
            <div class="copyright">© 2016 · Все права защищены · Строительство каркасных домов в Москве и Мос.области</div>
          </div>
        </div>
      </div>
      
		</footer>
<?php wp_footer(); ?>
</body>
</html>