<?php


namespace Neputer\Resource;


use Illuminate\Http\Resources\Json\Resource;

class TestResources extends Resource
{
    public function toArray()
    {
        return [
          'id' => $this.id,
          'name' =>$this.name,
        ];
    }
}
