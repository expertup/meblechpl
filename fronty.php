<?
$dir = dir('images/fronty');
while($file = $dir->read()){
  if($file != '.' && $file != '..'){
  echo '<h1 class="ng">'.ucfirst($file).'</h1><p>';
		foreach(glob('images/fronty/'.$file.'/*', GLOB_BRACE) as $filea){
		 if(strpos($filea, '_thumb')){
			echo '<a href="./'.str_replace('_thumb','',$filea).'" class="gall" rel="'.strtolower($file).'"><img class="gal" src="'.$filea.'" /></a> ';
			}
		}
		echo '</p>';
	}
}
$dir->close();
?>