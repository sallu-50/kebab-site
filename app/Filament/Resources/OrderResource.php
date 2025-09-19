use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_name')
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\TextInput::make('customer_address')
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\TextInput::make('customer_phone')
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\TextInput::make('customer_email')
                    ->email()
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\TextInput::make('total_amount')
                    ->numeric()
                    ->disabled(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required(),
                Forms\Components\Repeater::make('orderItems')
                    ->relationship()
                    ->schema([
                        Forms\Components\TextInput::make('menuItem.name')
                            ->label('Item Name')
                            ->disabled(),
                        Forms\Components\TextInput::make('quantity')
                            ->numeric()
                            ->disabled(),
                        Forms\Components\TextInput::make('price')
                            ->numeric()
                            ->disabled(),
                    ])
                    ->columns(3)
                    ->disabled()
                    ->deletable(false)
                    ->addable(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Order ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()->isLocationManager()) {
            $query->whereHas('orderItems.menuItem.locations', function ($query) {
                $query->where('location_id', auth()->user()->location_id);
            });
        }

        return $query;
    }
}
