<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:32 PM
 */

namespace App\Service\Utilty;


use App\Models\Utility\Testimonial;
use App\Repository\Utility\TestimonialRepositoryInterface;

class DbTestimonialRepository implements TestimonialRepositoryInterface
{

    protected $testimonial;
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }


    public function all()
    {
        // TODO: Implement all() method.
        return $this->testimonial->all();
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function getLandingTestimonial($numberOfTestimonial)
    {
        return $this->testimonial->take($numberOfTestimonial)->inRandomOrder()->get();
    }
}