<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
{
public string $imageUrl;

public function __construct(string $imageUrl = null)
{
$this->imageUrl = $imageUrl ?? ''; // Fallback ke string kosong jika null
}

public function render(): View|Closure|string
{
return view('components.about');
}
}
?>
