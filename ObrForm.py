import asyncio
from aiogram import Bot
import sys

token = '2081221944:AAEbnYt_z24jW5_On71eZLI-U0IPaJCFr9s'
bot = Bot(token)
id_lexa = 1061649758
msg = sys.argv[1]

async def gg():
    await bot.send_message(id_lexa, msg)



asyncio.run(gg())