<script>
import {Pie} from 'vue-chartjs'
import ChartJSPluginDatalabels from "chartjs-plugin-datalabels";


export default {
    extends: Pie,
    props: ['optionschart'],
    mounted() {
        this.$emit('get_optionschart')
    },
    methods: {
        getRandomInt() {
            return Math.floor(Math.random() * (50 - 5 + 1)) + 5
        },

        setOption() {

            this.renderChart({

                    labels: ['معافیت تحصیلی', 'دارای کارت پایان خدمت', 'معافیت دائم', 'در حال خدمت'],
                    datasets: [
                        {
                            label: 'تعداد',
                            backgroundColor: ['#f87979', '#00d8ff', '#35b982', '#e7664d', 'yellow', 'blue', 'green', '#337DFF', '#E133FF', '#DAFF33', '#33FFA5', '#FF3362', '#2DA1AA', '#63AA2D', '#AA452D', '#2D54AA', '#BB61D4', '#D49C61', '#5A4E42', '#E5A409', '#E50909', '#0980E5', '#1C3448'],
                            data: this.optionschart,
                            borderColor: '#2554FF',
                            borderWidth: 1,
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
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
                        text: 'وضعیت نظام وظیفه',
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


}
</script>

<style>
a {
    font-weight: bold;
    color: #2c3e50;
}


</style>
