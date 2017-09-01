<?php
/**
 * This file is part of the Sulaeman Social Login package.
 *
 * @author Sulaeman <me@sulaeman.com>
 * @copyright Copyright (c) 2017
 * @package Sulaeman_SocialLogin
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sulaeman\SocialLogin\Provider;

class Google extends AbstractProvider
{
    /**
     * {@inheritdoc}
     */
    protected $socialType = 'Google';

    /**
     * {@inheritdoc}
     */
    protected $config = [
        'access_type' => 'offline'
    ];
}
