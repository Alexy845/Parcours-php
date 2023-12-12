<?php
class Geolocation {
    public static function fromGeoPoints(float $lat1, float $lon1, float $lat2, float $lon2): float {
        $earthRadius = 6371;

        $latDiff = deg2rad($lat2 - $lat1);
        $lonDiff = deg2rad($lon2 - $lon1);

        $a = sin($latDiff / 2) * sin($latDiff / 2) +
             cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
             sin($lonDiff / 2) * sin($lonDiff / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;
        return round($distance, 1); 
    }
}

$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032); // 333.1
echo $calc; // 333.1
