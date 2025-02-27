<div class="container-fluid comments px-0 border-top">
  <div class="container mx-auto px-0">
    <div class="row w-100 mx-auto p-3">
      <h2 class="mb-4 w-100">Comments</h2>
      <div id="fb-root"></div>
      <script>
      $(document).ready(function() {
        $.ajax({
          url: 'https://connect.facebook.net/en_US/sdk.js',
          type: 'GET',
          cache: true,
          global: false,
          dataType: 'script',
          async: true
        }).done(function(){
          FB.init({
            appId: '562283911060533',
            cookie : true,
            xfbml : true,
            version : 'v13.0'
          });
        });
      });
      </script>
      <div id="fb-customer-chat" class="fb-customerchat" theme_color="#000000"></div>
      <div class="fb-login-button facebook_plugin" data-width="300" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
      <div id="fb_like" class="fb-like facebook_plugin" data-width="300" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
      <div id="fb_comments" class="fb-comments" data-href="" data-lazy="true" data-width="100%" data-numposts="12" data-colorscheme="light" data-order-by="reverse_time"></div>
      <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102585574718892");
      chatbox.setAttribute("attribution", "biz_inbox");
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
@if ($roomCode != '')
      $('#fb_like, #fb_comments').attr('data-href', '{{ url("/room/{$roomCode}") }}');
@else
      $('#fb_like, #fb_comments').attr('data-href', '{{ url()->current() }}');
@endif
      </script>
    </div>
  </div>
</div>