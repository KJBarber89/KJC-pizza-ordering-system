- create_orders_table.sql

CREATE TABLE IF NOT EXISTS orders (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    customer_name TEXT NOT NULL,
    customer_address TEXT NOT NULL,
    pizza_size TEXT NOT NULL,
    crust TEXT NOT NULL,
    toppings TEXT, -- Store toppings as a comma-separated string
    total_price REAL NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
