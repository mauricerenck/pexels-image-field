<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Traits\Arrays;

use WBW\Library\Easilys\Model\Certification;

/**
 * Array certifications trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Traits\Arrays
 */
trait ArrayCertificationsTrait {

    /**
     * Certifications.
     *
     * @var Certification[]
     */
    protected $certifications;

    /**
     * Add a certification.
     *
     * @param Certification|null $certification The certification.
     * @return self Returns this instance.
     */
    public function addCertification(?Certification $certification): self {

        if (null !== $certification) {
            $this->certifications[] = $certification;
        }

        return $this;
    }

    /**
     * Get the certifications.
     *
     * @return Certification[] Returns the certifications.
     */
    public function getCertifications(): array {
        return $this->certifications;
    }

    /**
     * Set the certifications.
     *
     * @param Certification[] $certifications The certifications.
     * @return self Returns this instance.
     */
    protected function setCertifications(array $certifications): self {
        $this->certifications = $certifications;
        return $this;
    }
}
