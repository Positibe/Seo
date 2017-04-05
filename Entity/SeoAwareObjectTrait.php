<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Positibe\Component\Seo\Entity;

use Symfony\Cmf\Bundle\SeoBundle\Model\SeoMetadata;

/**
 * Class SeoAwareObjectTrait
 * @package Positibe\Component\Seo\Entity
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
trait SeoAwareObjectTrait {

    /**
     * @var SeoMetadata
     *
     * @ORM\Column(type="object")
     */
    protected $seoMetadata;

    /**
     * @return SeoMetadata
     */
    public function getSeoMetadata()
    {
        return $this->seoMetadata;
    }

    /**
     * @param $metadata
     * @return $this
     */
    public function setSeoMetadata($metadata)
    {
        $this->seoMetadata = $metadata;

        return $this;
    }
} 