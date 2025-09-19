@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-6">Our Menu</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-xl font-bold mb-4">Kebab in tortilla</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Tortilla</span>
                        <span>21,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tortilla with cheese</span>
                        <span>25,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tortilla with fries</span>
                        <span>25,00 zł</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Kebab pita</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Pita</span>
                        <span>20,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Pita with cheese</span>
                        <span>24,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Pita with fries</span>
                        <span>24,00 zł</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Kebab in a bun</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Bun</span>
                        <span>25,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Bun with cheese</span>
                        <span>29,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Bun with fries</span>
                        <span>29,00 zł</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Kebab in a cup</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Cup</span>
                        <span>22,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Cup with only meat</span>
                        <span>40,00 zł</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Vegetarian dishes</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Falafel in tortilla</span>
                        <span>18,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Falafel in a cup</span>
                        <span>21,00 zł</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Extras</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Fries small 150g</span>
                        <span>11,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Fries large 180g</span>
                        <span>14,00 zł</span>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-bold mb-4">Non-alcoholic drinks</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span>Coca-Cola 0,5l</span>
                        <span>8,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Fanta Orange 0,5l</span>
                        <span>8,00 zł</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sprite 0,5l</span>
                        <span>8,00 zł</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
