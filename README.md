## Read Many-to-Many basics & try with this code as you want

Go throw **laravel documentation** to read about it & many more blog

First you need to clone this and save **.env.example as .env** and setup your environment or just change the database configure

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-user-name
DB_PASSWORD=your-database-password(if have)
```

Now just run some command on terminal one by one

```sh
composer install
php artisan migrate
php artisan serve
```

for dummy or fake data you can run
```sh
php artisan migrate:refresh --seed
```

As I have said this is Many to Many relationship. // Imagine part
- Example1: A Product can have many category
- Example2: A category can have many product
- Example3: A Company can have many projects
- Example4: A projects can be assigned many Company
- Example5: A Book can be write by many Writters
- Example6: A Writter can write many Books

So I have just created Two model
- **Product**
- **Category**

And three migration file products, categories & category_product

Product Model are relation with hasOne

```sh
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
```

Category Model are relation with belongsTo

```sh
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // You can save return $this->belongsToMany(Product::class, 'category_id');
    // $this->belongsToMany(Product::class, 'category_id');
    // relation pivot table name if you didn't follow the naming convention 
```

And controller code are depend's on condition what I need. So you can go throw the controllers method.

if you have **Postman**/any software like that please import One-to-Many.postman_collection.json file either call
```sh
- {url-of-your-app}/api/products                 --method : get      // get all product with categories list
- {url-of-your-app}/api/products/{product}       --method : get      // get single product with categories list
- {url-of-your-app}/api/products                 --method : post     // insert product details & category
- {url-of-your-app}/api/products/{product}       --method : put      // update product details & category
- {url-of-your-app}/api/products/{product}       --method : delete   // delete product and remove category relations 
- {url-of-your-app}/api/categories               --method : get      // get all category 
- {url-of-your-app}/api/categories/{category}    --method : get      // get all product under the category
- {url-of-your-app}/api/categories/              --method : post     // create category
- {url-of-your-app}/api/categories/{category}    --method : put      // update category by category/id
- {url-of-your-app}/api/categories/{category}    --method : delete   // delete category by category/id
```