<?php

/*
 * This file is part of the PHP Highcharts library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\Highcharts\Series;

use Misd\Highcharts\Axis\XAxisInterface;
use Misd\Highcharts\Axis\YAxisInterface;
use Misd\Highcharts\DataPoint\DataPointInterface;
use Misd\Highcharts\Exception\InvalidArgumentException;
use Misd\Highcharts\Series\Marker\MarkerInterface;
use Zend\Json\Expr;

/**
 * Chart series.
 *
 * Do not implement this interface directly.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
interface SeriesInterface
{
    /**
     * Gets the series name.
     *
     * @return string|null Name, or `null` if not set.
     */
    public function getName();

    /**
     * Sets the series name.
     *
     * @param string|null $name Name, or `null` to remove the existing value.
     *
     * @return self Reference to the series.
     */
    public function setName($name);

    /**
     * Gets the color.
     *
     * @return string Color, or `null` if not set.
     */
    public function getColor();

    /**
     * Sets the color.
     *
     * @param string|null $color Color, or `null` to remove the existing value.
     *
     * @return self Reference to the series.
     */
    public function setColor($color);

    /**
     * Gets the data points.
     *
     * @return DataPointInterface[] Data points.
     */
    public function getDataPoints();

    /**
     * Adds a data point.
     *
     * @param DataPointInterface $dataPoint Data point.
     *
     * @return self Reference to the series.
     */
    public function addDataPoint(DataPointInterface $dataPoint);

    /**
     * Adds data.
     *
     * @param int[] $data Data.
     *
     * @return self Reference to the series.
     */
    public function addData(array $data);

    /**
     * Gets the x-axis that the series is connected to.
     *
     * @return XAxisInterface X-axis, or `null` if not set.
     */
    public function getXAxis();

    /**
     * Sets the x-axis that the series is connected to.
     *
     * @param XAxisInterface|null $xAxis X-axis, or `null` to remove the existing value.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setXAxis($xAxis);

    /**
     * Gets the y-axis that the series is connected to.
     *
     * @return YAxisInterface Y-axis, or `null` if not set.
     */
    public function getYAxis();

    /**
     * Sets the y-axis that the series is connected to.
     *
     * @param YAxisInterface|null $yAxis Y-axis, or `null` to remove the existing value.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setYAxis($yAxis);

    /**
     * Gets the labels formatter.
     *
     * @return Expr|null Labels formatter, or `null` if not set.
     */
    public function getLabelsFormatter();

    /**
     * Sets the labels formatter.
     *
     * @param Expr|null $labelsFormatter Labels formatter, or `null` to remove the existing value.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setLabelsFormatter($labelsFormatter);

    /**
     * Gets the marker.
     *
     * @return MarkerInterface Marker.
     */
    public function getMarker();

    /**
     * Is enable mouse tracking.
     *
     * @return bool `true` if enabled, otherwise `false.
     */
    public function isEnableMouseTracking();

    /**
     * Set enable mouse tracking.
     *
     * @param bool $enabledMouseTracking `true` if enabled, otherwise `false.
     *
     * @return self Reference to the series.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setEnableMouseTracking($enabledMouseTracking = true);
}