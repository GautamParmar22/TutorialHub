package com.example.dbhelper;

import android.content.ContentValues;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class DBHelper extends SQLiteOpenHelper {
   final static String DATABASE_NAME = "MCATHREE.db";
   final static int DATABASE_VERSION = 1;
   final static String TABLE_NAME = "students";
    final static String col_1 = "ID";
    final static String col_2 = "NAME";
   final static String col_3 = "EMAIL";
    public DBHelper(MainActivity mainActivity) {
        super(mainActivity,DATABASE_NAME,null,DATABASE_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("CREATE TABLE "+ TABLE_NAME +"(ID integer primary key autoincrement, NAME text, EMAIL text)");

    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS "+TABLE_NAME);
        onCreate(db);

    }

    public boolean Insertvalues(String name, String email) {
        SQLiteDatabase sqLiteDatabase = this.getWritableDatabase();
        ContentValues contentValues = new ContentValues();
        contentValues.put(col_2,name);
        contentValues.put(col_3,email);

        long result = sqLiteDatabase.insert(TABLE_NAME,null,contentValues);
       if (result == -1)
       {
           return false;
       }
       else
       {
           return true;
       }

    }

    public Cursor displayData() {
        SQLiteDatabase sqLiteDatabase = this.getReadableDatabase();
        Cursor cursor = sqLiteDatabase.rawQuery("Select * from "+ TABLE_NAME,null);
        return cursor;
    }
}