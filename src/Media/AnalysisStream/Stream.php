<?php

/**
 * This file is part of the Shaka-PHP package.
 *
 * (c) Amin Yazdanpanah <contact@aminyazdanpanah.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Shaka\Media\AnalysisStream;


class Stream implements \Countable
{
    private $stream;

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addAttr($key, $value)
    {
        $this->stream[$key] = $value;

        return $this;
    }

    /**
     * @param array $attr
     * @param bool $string
     * @return mixed
     */
    public function get($attr = ['*'], $string = true)
    {
        if (!is_array($attr)) {
            $attr = array($attr);
        }

        $out = array_filter($this->stream, function ($key) use ($attr) {
            return in_array($key, $attr) || current($attr) === "*";
        }, ARRAY_FILTER_USE_KEY);

        return ($string) ? implode(',', $out) : $out;
    }

    /**
     * @param $attr
     * @param bool $string
     * @return mixed
     */
    public function except($attr, $string = false)
    {
        if (!is_array($attr)) {
            $attr = array($attr);
        }

        $out = array_filter($this->stream, function ($key) use ($attr) {
            return !in_array($key, $attr);
        }, ARRAY_FILTER_USE_KEY);

        return ($string) ? implode(',', $out) : $out;
    }

    /**
     * @return bool
     */
    public function isAudio()
    {
        return $this->get('type', true) === 'Audio';
    }

    /**
     * @return bool
     */
    public function isVideo()
    {
        return $this->get('type', true) === 'Video';
    }

    public function keys()
    {
        return array_keys($this->stream);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->stream;
    }

    /**
     * @param $attr
     * @return bool
     */
    public function has($attr)
    {
        return isset($this->stream[$attr]);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->stream);
    }
}