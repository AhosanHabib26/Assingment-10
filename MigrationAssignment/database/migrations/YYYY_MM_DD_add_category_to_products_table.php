// Add the following code to define the "category" column in the "up" method.
public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('category', 50);
    });
}
