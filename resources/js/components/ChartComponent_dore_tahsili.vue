<script>
import { Line, mixins } from 'vue-chartjs'

export default {
    extends: Line,
    props: ['optionschart_dore_tahsili'],
    methods: {
        getRandomInt() {
            return Math.floor(Math.random() * (50 - 5 + 1)) + 5
        },

        setOption() {

            this.renderChart({

                    labels: [
                        '90-91',
                        '91-92',
                        '92-93',
                        '93-94',
                        '94-95',
                        '95-96',
                        '96-97',
                        '97-98',
                        '98-99',
                        '99-1400',
                        '1401-1402',
                        '1402-1403',
                        '1403-1404',
                        '1404-1405',

                    ],
                    datasets: [
                        {
                            label: 'تعداد',
                            backgroundColor: ['#f87979', '#00d8ff', '#35b982', '#e7664d', 'yellow', 'blue', 'green', '#337DFF', '#E133FF', '#DAFF33', '#33FFA5', '#FF3362', '#2DA1AA', '#63AA2D', '#AA452D', '#2D54AA', '#BB61D4', '#D49C61', '#5A4E42', '#E5A409', '#E50909', '#0980E5', '#1C3448'],
                            data: this.optionschart_dore_tahsili
                        },
                    ],

                },
                {
                    responsive: true,
                    maintainAspectRatio: false,
                    pieceLabel: {
                        render: 'value',
                        precision: 1
                    },
                    showAllTooltips: true,
                    title: {
                        display: true,
                        text: 'دوره تحصیلی',
                        fontFamily: 'Shabnam',
                        fontColor: '#FFA117',
                    },

                    legend: {
                        labels: {
                            render: 'percentage',
                            precision: 2,
                            fontColor: '#000',
                            fontSize: 10,
                            fontFamily: 'Shabnam',
                        },

                    },

                    plugins: {
                        datalabels: {
                            formatter: (value, ctx) => {
                                let datasets = ctx.chart.data.datasets;
                                if (datasets.indexOf(ctx.dataset) === datasets.length - 1) {
                                    let sum = datasets[0].data.reduce((a, b) => a + b, 0);
                                    let percentage = Math.round((value / sum) * 100)
                                    if (percentage != 0) {
                                        return percentage = Math.round((value / sum) * 100) + '%';
                                    }

                                } else {
                                    return percentage;
                                }
                            },
                            color: '#000',
                        }
                    }


                }


            )

        }
    },
    data() {
        return {
            options: {
                height: 180,
                width: "100%",

                legend: {
                    fontSize: "100px"
                },
            }
        }
    }

}
</script>

<style>


</style>
