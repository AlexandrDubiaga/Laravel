<?php
class Album extends Eloquent
{
  protected $table = 'Album';
  protected $primaryKey = 'AlbumId';
   protected function track()
    {
        return $this->hasmany('Track','AlbumId','AlbumId');
    }
  
}
?>
