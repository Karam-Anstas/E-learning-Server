<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "optionId" => $this->id,
            "questionId" => $this->question_id,
            "optionText" => $this->option_text,
            "isCorrect" => $this->is_correct,
        ];
    }
}
