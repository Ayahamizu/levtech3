<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

<<<<<<< HEAD
public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
=======
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
}
>>>>>>> f80a06f56f1dd4e5000ed1f09e05eed786001d4e
?>