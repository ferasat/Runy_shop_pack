<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'family' => $this->family,
            'cellPhone' => $this->cellPhone,
            'pic' => $this->pic,
            'status' => $this->status,
            'levelUser' => $this->levelUser,
            'levelPermission' => $this->levelPermission,
            'role' => $this->role,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
