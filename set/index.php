<?php include "include/header.php"; ?>
    <div class="wrap home hide" > 
    	<div class="bd">


    	</div>
    </div> 
    <script type="text/javascript">
	    var loaderStart = new En.Loading();	
		loaderStart.init({
		    imgs:[],
		    enterCallback:function(){
		        var per = this.count/this.length*100>>0;
		        $('.loading .per').height(per+'%')
		    },
		    callback:function(){
		        $(".loading").hide();
		        $(".wrap").show();
		    }
		});
    </script>
<?php include "include/footer.php"; ?>