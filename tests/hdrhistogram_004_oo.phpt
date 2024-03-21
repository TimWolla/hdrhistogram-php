--TEST--
hdrhistogram: Value At Percentile
--FILE--
<?php

$hdr = new HdrHistogram\Histogram(1, 100, 5);

for ($i = 1; $i <= 100; $i++) {
    $hdr->recordValue($i);
}

echo "perc(50): " . $hdr->getValueAtPercentile(50) . "\n";
echo "perc(95): " . $hdr->getValueAtPercentile(95) . "\n";

?>
--EXPECTF--
perc(50): 50
perc(95): 95
