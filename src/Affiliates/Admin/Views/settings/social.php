<?php 
	$opts = array(
			array( 'value' => 1, 'text' => 'Yes' ),
			array( 'value' => 0, 'text' => 'No' ),
	);

?>
<div class="row">
    <div class="col-md-12">
        
        <div class="row">
            <div class="col-md-2">

                <h3>Facebook</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Facebook][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Facebook.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App ID</label>
                    <input type="text" name="social[providers][Facebook][keys][id]" placeholder="App ID" value="<?php echo $flash->old('social.providers.Facebook.keys.id'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->

        <hr />

        <div class="row">
            <div class="col-md-2">

                <h3>Twitter</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Twitter][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Twitter.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App ID</label>
                    <input type="text" name="social[providers][Twitter][keys][key]" placeholder="App ID" value="<?php echo $flash->old('social.providers.Twitter.keys.key'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label>App Secret</label>
                    <input type="text" name="social[providers][Twitter][keys][secret]" placeholder="App Secret" value="<?php echo $flash->old('social.providers.Twitter.keys.secret'); ?>" class="form-control" />
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        
        <hr />

        <div class="row">
            <div class="col-md-2">

                <h3>Google +</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][Google][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.Google.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-2">

                <h3>LinkedIn</h3>

            </div>
            <!-- /.col-md-2 -->

            <div class="col-md-10">

                <div class="form-group">
                    <label>Enabled?</label>
                    <select name="social[providers][LinkedIn][enabled]" class="form-control">
                    	<?php  echo \Dsc\Html\Select::options( $opts, $flash->old('social.providers.LinkedIn.enabled') ); ?>
                    </select>
                
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col-md-10 -->

        </div>
        <!-- /.row -->
        

    </div>
</div>
