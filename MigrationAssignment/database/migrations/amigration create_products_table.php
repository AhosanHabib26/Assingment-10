// Add the following code to define the columns in the "up" method.
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price');
        $table->text('description');
        $table->timestamps(); // creates 'created_at' and 'updated_at' columns
    });
}
