<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twig</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }

        #user-table {
            color: #ffffff;
            background-color: #F1C40F;
        }
    </style>
</head>

<body>

    <div class="container">

        {{ "I like this and --that--."|replace({'this': fruit, '--that--': "oranges"}) }}

        {{ max({2: "e", 1: "a", 3: "b", 5: "d", 4: "c"}) }} <!-- array -->

        <table class="table table-bordered">
            <thead id="user-table">
                <tr>
                    <td>#</td>
                    <td>name</td>
                    <td>age</td>
                    <td>sex</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.age }}</td>
                        {% if user.sex == 'male' %}
                            <td><span class="badge text-bg-success">{{ user.sex }}</span></td>
                        {% elseif user.sex == 'female' %}
                            <td><span class="badge text-bg-danger">{{ user.sex }}</span></td>
                        {% endif %}
                        <td><a href="views/get.php?id={{ loop.index }}">{{ user.name }}</a></td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>

        <hr>

        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>



    