<?php

namespace Database\Seeders;

use Botble\Base\Models\MetaBox as MetaBoxModel;
use Botble\Base\Supports\BaseSeeder;
use Botble\Language\Models\LanguageMeta;
use Botble\RealEstate\Models\Facility;
use Botble\Slug\Models\Slug;

class FacilitySeeder extends BaseSeeder
{
    public function run()
    {
        Facility::truncate();
        Slug::where('reference_type', Facility::class)->delete();
        MetaBoxModel::where('reference_type', Facility::class)->delete();
        LanguageMeta::where('reference_type', Facility::class)->delete();

        $data = [
            'en_US' => [
                [
                    'name' => 'Hospital',
                    'icon' => 'far fa-hospital',
                ],
                [
                    'name' => 'Super Market',
                    'icon' => 'fas fa-cart-plus',
                ],
                [
                    'name' => 'School',
                    'icon' => 'fas fa-school',
                ],
                [
                    'name' => 'Entertainment',
                    'icon' => 'fas fa-hotel',
                ],
                [
                    'name' => 'Pharmacy',
                    'icon' => 'fas fa-prescription-bottle-alt',
                ],
                [
                    'name' => 'Airport',
                    'icon' => 'fas fa-plane-departure',
                ],
                [
                    'name' => 'Railways',
                    'icon' => 'fas fa-subway',
                ],
                [
                    'name' => 'Bus Stop',
                    'icon' => 'fas fa-bus',
                ],
                [
                    'name' => 'Beach',
                    'icon' => 'fas fa-umbrella-beach',
                ],
                [
                    'name' => 'Mall',
                    'icon' => 'fas fa-cart-plus',
                ],
                [
                    'name' => 'Bank',
                    'icon' => 'fas fa-university',
                ],
            ],
            'vi'    => [
                [
                    'name' => 'B???nh vi???n',
                    'icon' => 'far fa-hospital',
                ],
                [
                    'name' => 'Si??u th???',
                    'icon' => 'fas fa-cart-plus',
                ],
                [
                    'name' => 'Tr?????ng h???c',
                    'icon' => 'fas fa-school',
                ],
                [
                    'name' => 'Trung t??m gi???i tr??',
                    'icon' => 'fas fa-hotel',
                ],
                [
                    'name' => 'Nh?? thu???c',
                    'icon' => 'fas fa-prescription-bottle-alt',
                ],
                [
                    'name' => 'S??n bay',
                    'icon' => 'fas fa-plane-departure',
                ],
                [
                    'name' => 'Ga t??u',
                    'icon' => 'fas fa-subway',
                ],
                [
                    'name' => 'Tr???m xe bu??t',
                    'icon' => 'fas fa-bus',
                ],
                [
                    'name' => 'B??i bi???n',
                    'icon' => 'fas fa-umbrella-beach',
                ],
                [
                    'name' => 'Trung t??m mua s???m',
                    'icon' => 'fas fa-cart-plus',
                ],
                [
                    'name' => 'Ng??n h??ng',
                    'icon' => 'fas fa-university',
                ],
            ],
        ];

        foreach ($data as $locale => $facilities) {
            foreach ($facilities as $index => $item) {
                $facility = Facility::create($item);

                $originValue = null;

                if ($locale !== 'en_US') {
                    $originValue = LanguageMeta::where([
                        'reference_id'   => $index + 1,
                        'reference_type' => Facility::class,
                    ])->value('lang_meta_origin');
                }

                LanguageMeta::saveMetaData($facility, $locale, $originValue);
            }
        }
    }
}
