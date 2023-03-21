<script>
    Highcharts.chart('grafico1', {
        title: {
            text: 'Índice de itens cadastrados',
            align: 'center'
        },

        yAxis: {
            tickInterval: 1,
            title: {
                text: 'Número de itens cadastrados'
            }
        },

        xAxis: {
            categories: [
               @foreach($graficos[1] as $categoria)
                '{{ $categoria }}',
               @endforeach
            ],
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {

            series: {
                label: {
                    connectorAllowed: false
                },
            }
        },

        series: [
            {
            name: 'Quantidade',
            data: [
            @if(isset($graficos[0]['grafico1']))
                @foreach($graficos[0]['grafico1'] as $chave => $valor)
                    {{$valor}},
                @endforeach
            @endif
            ]
            },
        ],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>
