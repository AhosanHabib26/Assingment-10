// Add the following code to define the columns in the "up" method.
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id');
        $table->foreign('product_id')->references('id')->on('products');
        $table->integer('quantity');
        $table->timestamps(); // creates 'created_at' and 'updated_at' columns
    });
}

public function down()
{
    Schema::dropIfExists('orders');
}
