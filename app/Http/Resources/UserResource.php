<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id' => $this->nip, // For compatibility with frontend
            'nip' => $this->nip,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'home_address' => $this->home_address,
            'role' => $this->role,
            'is_super_admin' => $this->isSuperAdmin(),
            'is_employee' => $this->isEmployee(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
