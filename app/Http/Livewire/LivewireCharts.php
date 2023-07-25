<?php
namespace App\Http\Livewire;
use App\Models\Courrierarr;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;
class LivewireCharts extends Component
{
public $types = ['numCr', 'shopping', 'entertainment', 'travel', 'other'];
public $colors = [
'numCr' => '#f6ad55',
'shopping' => '#fc8181',
'entertainment' => '#90cdf4',
'travel' => '#66DA26',
'other' => '#cbd5e0',
];
public $firstRun = true;
protected $listeners = [
'onPointClick' => 'handleOnPointClick',
'onSliceClick' => 'handleOnSliceClick',
'onColumnClick' => 'handleOnColumnClick',
];
public function handleOnPointClick($point)
{
dd($point);
}
public function handleOnSliceClick($slice)
{
dd($slice);
}
public function handleOnColumnClick($column)
{
dd($column);
}
public function render()
{
$courrierarrs = Courrierarr::whereIn('numCr', $this->numCr)->get();
$columnChartModel = $courrierarrs->groupBy('numCr')
->reduce(function (ColumnChartModel $columnChartModel, $data) {
$type = $data->first()->type;
$value = $data->sum('amount');
return $columnChartModel->addColumn($type, $value, $this->colors[$type]);
}, (new ColumnChartModel())
->setTitle('courrierarrs by Type')
->setAnimated($this->firstRun)
->withOnColumnClickEventName('onColumnClick')
);
$pieChartModel = $courrierarrs->groupBy('type')
->reduce(function (PieChartModel $pieChartModel, $data) {
$type = $data->first()->type;
$value = $data->sum('amount');
return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
}, (new PieChartModel())
->setTitle('courrierarrs by Type')
->setAnimated($this->firstRun)
->withOnSliceClickEvent('onSliceClick')
);
$lineChartModel = $courrierarrs
->reduce(function (LineChartModel $lineChartModel, $data) use ($courrierarrs) {
$index = $courrierarrs->search($data);
$amountSum = $courrierarrs->take($index + 1)->sum('amount');
if ($index == 6) {
$lineChartModel->addMarker(7, $amountSum);
}
if ($index == 11) {
$lineChartModel->addMarker(12, $amountSum);
}
return $lineChartModel->addPoint($index, $amountSum, ['id' => $data->id]);
}, (new LineChartModel())
->setTitle('courrierarrs Evolution')
->setAnimated($this->firstRun)
->withOnPointClickEvent('onPointClick')
);
$areaChartModel = $courrierarrs
->reduce(function (AreaChartModel $areaChartModel, $data) use ($courrierarrs) {
return $areaChartModel->addPoint($data->description, $data->amount, ['id' => $data->id]);
}, (new AreaChartModel())
->setTitle('courrierarrs Peaks')
->setAnimated($this->firstRun)
->setColor('#f6ad55')
->withOnPointClickEvent('onAreaPointClick')
->setXAxisVisible(false)
->setYAxisVisible(true)
);
$this->firstRun = false;
return view('livewire.livewire-charts')
->with([
'columnChartModel' => $columnChartModel,
'pieChartModel' => $pieChartModel,
'lineChartModel' => $lineChartModel,
'areaChartModel' => $areaChartModel,
]);
}
}