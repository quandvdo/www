<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:29 PM
 */

namespace App\Repository\Utility;


interface TestimonialRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function getLandingTestimonial($numberOfTestimonial);
}