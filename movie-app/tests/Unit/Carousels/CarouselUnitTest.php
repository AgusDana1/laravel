<?php 

namespace Tests\Unit\Carousels;

use Illuminate\Foundation\Testing\WithFaker;
use App\Shop\Carousels\Repositories\CarouselRepository;
use App\Shop\Carousels\Carousel;
use Tests\TestCase;

class CarouselUnitTest extends TestCase
{
    use WithFaker;

    /** @test */

    public function it_can_show_a_carousel()
    {
        // menggunakan factory baru
        $carousel = Carousel::factory()->make();
        $carouselRepo = new CarouselRepository(new Carousel);

        // implementasian findCarousel
        $found = $carouselRepo->findCarousel($carousel->id);

        $this->assertInstanceOf(Carousel::class, $found);
        $this->assertEquals($found['title'], $carousel->title);
        $this->assertEquals($found['link'], $carousel->link);
        $this->assertEquals($found['src'], $carousel);
    }

    /**
     * @test
     */

     public function it_can_create_a_carousel() {
        $data = [
            'title' => $this->faker->word,
            'link' => $this->faker->url,
            'src' => $this->faker->url,
        ];

        // create repository
        $carouselRepo = new CarouselRepository(new Carousel);
        $carousel = $carouselRepo->createCarousel($data);

        $this->assertInstanceOf(Carousel::class, $carousel);
        $this->assertEquals($data['title'], $carousel->title);
        $this->assertEquals($data['link'], $carousel->link);
        $this->assertEquals($data['src'], $carousel->src);
     }
}