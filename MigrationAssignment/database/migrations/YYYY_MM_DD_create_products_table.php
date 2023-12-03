// Add the following code to the "up" method to add the "quantity" column.
public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->integer('quantity')->nullable();
    });
}
