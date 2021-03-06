<?php
namespace App\Models\SiteManager;
use App\Models\Models;

class Image extends Models {
 public function __construct() {
  $this->Table('site.images');
  $this->fillable = ['image', 'path', 'title', 'alt', 'domain_id'];
 }
 public function posts() {
  return $this->belongsToMany('App\Models\SiteManager\Post', $this->Table('site.routes'), 'image_id', 'post_id');
 }
 public function pages() {
  return $this->belongsToMany('App\Models\SiteManager\Page', $this->Table('site.routes'), 'image_id', 'page_id');
 }
 public function domains() {
  return $this->belongsToMany('App\Models\Assets\Domain', $this->Table('site.routes'), 'image_id', 'domain_id');
 }
}