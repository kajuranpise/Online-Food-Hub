<div class="container-fluid" style="background: blue; color: white; ">
	
	<div class="row">
    <div class="col-sm-4"  style="margin-top: 2%; "><h2><b>Online Food HUB</b></h2></div>
    <div class="col-sm-8" ><ul>
        <script type="text/javascript">
            $(document).ready(function(){
               $('#p').click(function(){
                $('#d2').hide();
                $('#d1').slideToggle()
               });
               $('#o').click(function(){
                $('#d1').hide();
                $('#d2').slideToggle()
               });
            });
        </script>
    	<li><b><?= anchor('home/open_home','Home') ?></b></li>
    	<li id="p"><b>Product</b>
            <div id="d1">
                <p><?=anchor('admin_home/product_insert_open','Product Insert')?></p>
                <p><?=anchor('admin_home/product_display_open','Product Display')?></p>
            </div>
        </li>
    	<li id="o"><b>Order</b>
            <div id="d2">
                <p><?=anchor('admin_home/offline_order_open','Offline Order')?></p>
                <p><?=anchor('admin_home/offline_order_display_open','Offline Order Display')?></p>
                <p><?=anchor('admin_home/online_order_display_open','Online Order Display')?></p>
            </div>
        </li>
    	<li><a href="#"><b>Login</b></a></li>

    </ul></div>
  </div>
</div>