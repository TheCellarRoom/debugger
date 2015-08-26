
class dbg {

  function __construct( $type, $data, $output = TRUE) {
  
			switch($type) {
			
			 case: 'OUTPUT'
				if ( $output ) : ?>
		                <style>
		                    .hm_debug { word-wrap: break-word; white-space: pre; text-align: left; position: relative; background-color: rgba(0, 0, 0, 0.8); font-size: 11px; color: #a1a1a1; margin: 10px; padding: 10px; margin: 0 auto; width: 80%; overflow: auto;  -moz-border-radius: 5px; -webkit-border-radius: 5px; text-shadow: none; }
		                </style>
		                <br />
		                <pre class="hm_debug">
		        	 <?php endif;
		            // var_dump everything except arrays and objects
		            if ( ! is_array( $code ) && ! is_object( $code ) ) :
		                if ( $output )
		                    var_dump( $code );
		                else
		                    var_export( $code, true );
		            else :
		                if ( $output )
		                    print_r( $code );
		                else
		                    print_r( $code, true );
		                endif;
		            if ( $output )
		                echo '</pre><br />';
		            return $code;
			break;
			case: 'LOG'
					 // var_dump everything except arrays and objects
		            if ( ! is_array( $code ) && ! is_object( $code ) ) :
		                error_log( var_export( $code, true ) );
		            else :
		                error_log( print_r( $code, true ) );
		            endif;
		            return $code;
			break;
			case : 'DIE'
				        function dbg2_die( $code ) {
            				die( print_r( $code, true ) );
        				}
			break;
						case: 'TYPE'
			default:
			         print '<h5>'. gettype($data).'</h5>';
			         print '<pre>';
			         print_r($data);
			         print '</pre>';
			         print '<hr/>';
			 break;
		}
        }
  }
  
  new dbg();
