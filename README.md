Positibe Publishable Component
==============================

This library provide you some traits to be used in doctrine entities that implement `Symfony\Cmf\Bundle\SeoBundle\SeoAwareInterface`.

SeoAwareEntityTrait
-------------------

This trait has the default mapping for a Entity that has a association with SeoMetadata Entity.

    [php]
    <?php

    namespace Positibe\Component\Seo\Entity;

    use Symfony\Cmf\Bundle\SeoBundle\Model\SeoMetadata;

    trait SeoAwareEntityTrait {
        /**
         * @var SeoMetadata
         *
         * @ORM\ManyToOne(targetEntity="Symfony\Cmf\Bundle\SeoBundle\Model\SeoMetadata", cascade="all")
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

PublishTimePeriodTrait
----------------------

This trait has the default mapping for a Entity that store all data of SeoMetadata in a Doctrine Object.

    [php]
    <?php

    namespace Positibe\Component\Seo\Entity;

    use Symfony\Cmf\Bundle\SeoBundle\Model\SeoMetadata;

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

Using php trait
---------------

These are simple php traits so you can use it like that.

    [php]
    namespace Blog\Entity;

    use Symfony\Cmf\Bundle\SeoBundle\SeoAwareInterface;
    use Positibe\Component\Seo\Entity\SeoAwareEntityTrait;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table()
     * @ORM\Entity
     */
    class Post implement SeoAwareInterface
    {
        use SeoAwareEntityTrait;

        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;
    }

Note how you don't need to create anything to implement those interfaces.

**Caution:** To use the trait system you need to use PHP > 5.4.